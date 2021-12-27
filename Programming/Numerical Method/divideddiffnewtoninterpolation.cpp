#include<iostream>
#include<stdio.h>

using namespace std;



int main()
{
    int n=4;
    double x[n],y[n],xp,fp;
    double a[n];
    double d[n][n];
    double sum,pi;

    int i=0,j=0;

    printf("\nEnter the data points x and y\n");

    for(i=0;i<n;i++)
    {
        cout<<"x["<<i<<"],y["<<i<<"]: = ";
        cin>>x[i]>>y[i];
    }
    cout<<endl;

    printf("\nEnter the data point x for interpolation\n");
    cin>>xp;

    //creating difference table
    for(i=0;i<n;i++)
    {
        d[i][0]=y[i];
    }

    for(j=1;j<n;j++)
    {
       for(i=0;i<n-j;i++)
        d[i][j]=(d[i+1][j-1]-d[i][j-1])/(x[i+j]-x[i]);
    }
    //difference table is created

    //printing difference table
    for(i=0;i<n;i++)
    {
        cout<<x[i]<<"\t";
        for(j=0;j<n-i;j++)
            {
                cout<<d[i][j]<<"\t";
            }
        cout<<endl;
    }

    for(j=0;j<n;j++)
    {
        a[j]=d[0][j];
        cout<<endl<<a[j];
    }

    pi=1;
    sum=0;

    //interpolation
    for(i=0;i<n;i++)
    {
       for(j=0;j<i;j++)
        {
            pi=pi*(xp-x[j]);
        }
        sum=sum+a[i]*pi;
        pi=1;
    }

    fp=sum;

    cout<<endl<<"The value of y or f["<<xp<<"] is :"<<fp<<endl;
}
