//linear regression for obtaining line y=a+bx;

#include<iostream>
#include<stdio.h>
#include<math.h>

using namespace std;

int main()
{
    //co=ordinates
    double x[10],y[10];
    int n;

    printf("\nInsert number of co-ordinates : \t");
    scanf("%d",&n);

    for(int i=0;i<n;i++)
    {
        printf("\nInsert x[%d] y[%d] : \t",i,i);
        scanf("%lf %lf",&x[i],&y[i]);
    }

    double b,a;
    double sumx=0,sumy=0,sumxy=0,sumx2=0,averagex,averagey;

    for(int i=0;i<n;i++)
    {
        sumx=sumx+x[i];
        sumy=sumy+y[i];
        sumxy=sumxy+x[i]*y[i];
        sumx2=sumx2+x[i]*x[i];
    }

    averagex=sumx/n;
    averagey=sumy/n;

    b=(n*sumxy-sumx*sumy)/(n*sumx2-sumx*sumx);
    a=averagey-b*averagex;

    printf("\nRequired line is : y=%.2lf+%.2lfx\n",a,b);
}
