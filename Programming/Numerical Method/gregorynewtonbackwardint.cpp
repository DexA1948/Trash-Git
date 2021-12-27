#include<iostream>
#include<stdio.h>

using namespace std;

int fact(int n)
{
    if(n==0){return 1;}
    else{return n*fact(n-1);}
}

int main()
{
    int n=5;

    double x[n],f[n];
    double xp,fp;

    //iterators
    int i=0,j=0,k=0;

    for(i=0;i<n;i++)
    {
        printf("Enter x%d & y%d : ",i,i);
        scanf("%lf %lf",&x[i],&f[i]);
    }

    printf("\n");

    //creating difference table;
    double d[n][n];

    for(i=0;i<n;i++)
    {
        d[i][0]=f[i];
    }

    for(j=1;j<n;j++)
    {
        for(i=j;i<n;i++)
        {
            d[i][j]=d[i][j-1]-d[i-1][j-1];
        }
    }

    //printing backward difference table
    for(i=0;i<n;i++)
    {
        for(j=0;j<=i;j++)
        {
            printf("d[%d][%d] = %lf  ",i,j,d[i][j]);
        }
        printf("\n");
    }

    //interpolating
    printf("\nEnter the co-ordinate x to be interpolated : ");
    scanf("%lf",&xp);

    double pi=1,sum=0;

    double h=x[1]-x[0];
    cout<<"\nh="<<h<<endl;
    double s=(xp-x[n-1])/h;
    cout<<"\ns="<<s<<endl;

    for(j=0;j<n;j++)
    {
        pi=1;
        for(k=0;k<j;k++)
        {
            pi=pi*(s+k);
        }
        sum=sum+(pi/fact(j)*d[n-1][j]);
    }

    printf("\nInterpolated value at x=%lf is : %lf",xp,sum);

    return 0;
}
