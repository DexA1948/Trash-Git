#include<iostream>
#include<stdio.h>

using namespace std;

int fact(int n)
{
    if (n==0){return 1;}
    else{return n*fact(n-1);}
}

int main()
{
    int n=5;

    double x,f[n];
    double xp,fp;
    double p,h;

    //iterators
    int i=0,j=0,k=0;

    //inserting co-ordinates
    printf("Enter the co-ordinates : \n");
    printf("x[0]=");
    scanf("%lf",&x);
    printf("h=");
    scanf("%lf",&h);
    for(i=0;i<n;i++)
    {
        printf("\nx[%d]=%lf,y[%d]=",i,(x+i*h),i);
        scanf("%lf",&f[i]);
    }

    //printing and checking the inputs
    for(i=0;i<n;i++)
    {
        printf("\nx[%d]=%lf,y[%d]=%lf",i,(x+i*h),i,f[i]);
    }

    printf("\n\n");

    //Forward Interpolation
    //creating difference table
    double d[n][n];

    for(i=0;i<n;i++)
    {
        d[i][0]=f[i];
    }

    for(j=1;j<n;j++)
    {
        for(i=0;i<n;i++)
        {
            //forward difference table
            d[i][j]=d[i+1][j-1]-d[i][j-1];
        }
    }

    //printing difference table
    for(i=0;i<n;i++)
    {
        for (j=0;j<n-i;j++)
        {
            printf("d[%d][%d] = %lf ",i,j,d[i][j]);
        }
        printf("\n");
    }
    printf("\nEnter the co-ordinate 'x' for interpolation : \t");
    scanf("%lf",&xp);

    //Forward Interpolation
    double s=(xp-x)/h;
    double sum=0,pi=1;

    for(j=0;j<n;j++)
    {
        pi=1;
        for(k=0;k<j;k++)
        {
            pi=pi*(s-k);
        }
        sum=sum+(d[0][j]/fact(j)*pi);
    }

    printf("\nans is %lf",sum);

    //Backward Interpolation
    //creating difference table
    printf("\n\n");
    double db[n][n];

    for(i=0;i<n;i++)
    {
        db[i][0]=f[i];
    }

    for(j=1;j<n;j++)
    {
        for(i=n-1;i<=0;i--)
        {
            //backward difference table
            db[i][j]=db[i-1][j-1]-db[i][j-1];
        }
    }

    //printing difference table
    for(i=0;i<n;i++)
    {
        for (j=0;j<=i;j++)
        {
            printf("d[%d][%d] = %lf ",i,j,db[i][j]);
        }
        printf("\n");
    }

    s=(xp-(x+(n-1)*h))/h;
    cout<<endl<<s<<endl;

    sum=0;
    pi=1;

    //Backward Interpolation
    for(j=0;j<n;j++)
    {
        pi=1;
        for(k=0;k<j;k++)
        {
            pi=pi*(s+k);
        }
        sum=sum+(db[4][j]/fact(j)*pi);
    }

    printf("\nans is %lf",sum);
}
