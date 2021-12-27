#include<iostream>
#include<stdio.h>
#include<math.h>

using namespace std;

//co-ordinates
double x[10],y[10],xp;
//coefficients matrix;
double c[10][10];
//right side of system
double D[10];
//coefficients of cubic spline
double a[10];

void displaymatrix(int n,double a[10][10],double b[]);
void displaymatrix(int n,double b[]);

double h(int i)
{
    if(i==0){printf("error");}
    else    {return (x[i]-x[i-1]);}
}

double u(int i,double xp)
{
    return xp-x[i];
}

double s(int i,double xp)
{
    if(i==0){printf("error");}
    else
    {
        double q1,q2,q3,yp;
        q1=h(i)*h(i)*u(i,xp)-u(i,xp)*u(i,xp)*u(i,xp);
        q2=u(i-1,xp)*u(i-1,xp)*u(i-1,xp)-h(i)*h(i)*u(i-1,xp);
        q3=y[i]*u(i-1,xp)-y[i-1]*u(i,xp);
        yp=(a[i-1]*q1+a[i]*q2)/(6.0*h(i))+q3/h(i);
        return yp;
    }
}

int main()
{
    int i,j,k;
    int n=4;

    printf("\nn = \t");
    scanf("%d",&n);

    a[0]=a[n-1]=0;

    //inserting co-ordinates
    for(i=0;i<n;i++)
    {
        printf("\nx[%d] y[%d] = \t",i,j);
        scanf("%lf %lf",&x[i],&y[i]);
    }
    printf("\nPoint of interpolation (xp) = \t");
    scanf("%lf",&xp);

    //creating tridiagonal matrix of coefficients
    for(i=1;i<n-1;i++)
    {
        for(j=1;j<n-1;j++)
        {
            if (i==j+1)
                { c[i][j]=h(i); }
            else if (i==j)
            { c[i][j]=2*(h(i)+h(i+1)); }
            else if (i==j-1)
            { c[i][j]=h(i+1); }
            else
            { c[i][j]=0; }
        }
    }


    //creating right side of matrix
    for(i=1;i<n-1;i++)
    {
        double f0=y[i-1],f1=y[i],f2=y[i+1];
        double h1=h(i);
        double h2=h(i+1);
        D[i]=(6*((f2-f1)/h2-(f1-f0)/h1));
    }

    printf("\nC[%d][%d]:D[%d] = \n",n,n,n);
    displaymatrix(n,c,D);

    //using gauss elimination to solve for spline coefficients
    double factor,sum;
    for(k=1;k<n-2;k++)
    {
        //elimination
        for(i=k+1;i<n-1;i++)
        {
            factor=c[i][k]/c[k][k];
            for(j=k;j<n-1;j++)
            {
                c[i][j]=c[i][j]-factor*c[k][j];
            }
            D[i]=D[i]-factor*D[k];
        }
    }

    printf("\nAfter Gauss Elimination C[%d][%d]:D[%d] = \n",n,n,n);
    displaymatrix(n,c,D);

    //back substitution
    for(i=n-2;i>=1;i--)
    {
        sum=0;
        for(j=i+1;j<n-1;j++)
        {
            sum=sum+c[i][j]*a[j];
        }
        a[i]=1/c[i][i]*(D[i]-sum);
    }

    printf("\nAfter Back Subsitution\n");
    for(i=0;i<n;i++)
    {
        printf("\na[%d] = %lf\n",i,a[i]);
    }

    for(i=1;i<n;i++)
    {
        if(xp<x[i]){break;}
    }

    cout<<endl<<"i="<<i<<endl;

    printf("\nInterpolated value is %lf \n",s(i,xp));
}


void displaymatrix(int n,double a[10][10],double b[])
{
    for(int i=0;i<n;i++)
    {
        for(int j=0;j<n;j++)
        {
            printf("%lf\t",a[i][j]);
        }
        printf(" %lf\t",b[i]);
        printf("\n");
    }
}

void displaymatrix(int n,double b[])
{
    for(int i=0;i<n;i++)
    {
        printf(" %lf\t",b[i]);
        printf("\n");
    }
}

