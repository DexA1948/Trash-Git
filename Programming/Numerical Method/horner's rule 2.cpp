#include<iostream>
#include<stdio.h>

using namespace std;

int horner(int n,int x,int a[])
{
    int result=0;
    for(int i=n;i>=0;i--)
    {
        result = a[i] + (result * x);
    }
    return result;
}

int main()
{
    int degree,x,i;

    printf("Enter the degree of polynomial : ");
    scanf("%d",&degree);

    int a[degree+1];

    for(i=0;i<=degree;i++)
    {
        printf("\na[%d]=",i);
        scanf("%d",&a[i]);
    }

    printf("\nEnter the value for x : ");
    scanf("%d",&x);

    printf("\nThe value of given polynomial at x = %d is %d.",x,horner(degree,x,a));

    printf("\n\n%d",a[0]);
    for(i=1;i<=degree;i++)
    {
        printf(" + %d.%d^%d",a[i],x,i);
    }
    printf("= %d \n",horner(degree,x,a));
}
