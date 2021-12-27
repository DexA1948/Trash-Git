#include<iostream>
#include<stdio.h>
#include<math.h>

using namespace std;

//matrix of coeffiecients
double a[10][10];

//solution vector
double x[10];

//right side vector
double b[10];

//a[n][n]*x[n]=b[n]

void displaymatrix(int n,double a[10][10],double b[]);
void displaymatrix(int n,double b[]);

int main()
{
    //no of equations
    int n=3;

    int i=0,j=0,k=0;

    //for later operations
    double pivot,factor,sum=0;

    for(i=0;i<n;i++)
    {
        for(j=0;j<n;j++)
        {
            printf("\nInsert a[%d][%d] :\t",i,j);
            scanf("%lf",&a[i][j]);
        }
        printf("\nInsert b[%d] :\t",i);
        scanf("%lf",&b[i]);
    }

    displaymatrix(n,a,b);

    for(k=0;k<n-1;k++)
    {
        pivot=a[k][k];
        for(i=k+1;i<n;i++)
        {
            factor=a[i][k]/pivot;
            for(j=k;j<n;j++)
            {
                a[i][j]=a[i][j]-factor*a[k][j];
            }
            b[i]=b[i]-factor*b[k];
        }
    }

    displaymatrix(n,a,b);

    //solving via back substitution
    for(i=n-1;i>=0;i--)
    {
        sum=0;
        for(j=i+1;j<n;j++)
        {
            sum=sum+a[i][j]*x[j];
        }
        x[i]=(b[i]-sum)/a[i][i];
    }

    displaymatrix(n,x);
    return 0;
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
        printf(" %.2lf\t",b[i]);
        printf("\n");
    }
}


