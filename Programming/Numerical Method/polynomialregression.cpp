//regression for polynomial function
//f(x)=a0+a1.x+a2.x^2+a3.x^3.......

#include<iostream>
#include<stdio.h>
#include<math.h>

using namespace std;

void displaymatrix(int n,double a[10][10],double b[]);
void displaymatrix(int n,double b[]);

//matrix for CA=B;
//a=required co-efficients of polynomial function
//c,b=coefficients obtained from polynomial regression
double  c[10][10],a[10],b[10];

//co-ordinates;
double x[10],y[10];

int main()
{
    //iterators
    int i,j,k;

    //degree of polynomial
    int m;

    //no of coefficients and equation
    int mp;

    //no of data points
    int n;

    printf("\nEnter degree of polynomial ; \n");
    scanf("%d",&m);
    mp=m+1;

    printf("\nEnter no of co-ordinates ; \n");
    scanf("%d",&n);

    //inserting co-ordinates
    for(i=0;i<n;i++)
    {
        printf("\nInsert x[%d] y[%d] :\t",i,i);
        scanf("%lf %lf",&x[i],&y[i]);
    }

    //calculating coefficients of matrix c and b;
    for(j=0;j<mp;j++)
    {
        for(k=0;k<mp;k++)
        {
            c[j][k]=0;
            for(i=0;i<n;i++)
            {
                c[j][k]=c[j][k]+pow(x[i],j+k);
            }
        }
    }
    for(j=0;j<mp;j++)
    {
        b[j]=0;
        for(i=0;i<n;i++)
        {
            b[j]=b[j]+y[i]*pow(x[i],j);
        }
    }
    printf("\nAugmented Matrix  c:b \n");
    displaymatrix(mp,c,b);

    //using gauss elimination to solve for coefficients of polynomial;
    //elimination
    double pivot,factor;
    for(k=0;k<mp-1;k++)
    {
        pivot=c[k][k];
        for(i=k+1;i<mp;i++)
        {
            factor=c[i][k]/pivot;
            for(j=k;j<mp;j++)
            {
                c[i][j]=c[i][j]-factor*c[k][j];
            }
            b[i]=b[i]-factor*b[k];
        }
    }
    printf("\nAugmented Matrix  c:b after gauss elimination\n");
    displaymatrix(mp,c,b);
    //back substitution
    double sum;
    a[mp-1]=b[mp-1]/c[mp][mp];
    for(i=mp-1;i>=0;i--)
    {
        sum=0;
        for(j=i+1;j<n;j++)
        {
            sum=sum+c[i][j]*a[j];
        }
        a[i]=(b[i]-sum)/c[i][i];
    }

    //printing coefficients of polynomial
    printf("\nrequired coefficients are:\n");
    displaymatrix(mp,a);
}

void displaymatrix(int n,double a[10][10],double b[])
{
    for(int i=0;i<n;i++)
    {
        for(int j=0;j<n;j++)
        {
            printf("%.2lf\t",a[i][j]);
        }
        printf(" %.2lf\t",b[i]);
        printf("\n");
    }
}

void displaymatrix(int n,double b[])
{
    for(int i=0;i<n;i++)
    {
        printf("%.2lf\t",b[i]);
        printf("\n");
    }
}
