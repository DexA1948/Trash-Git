#include<stdio.h>

int fibonnaci(int n)
{
    if (n==1||n==2)
        {return 1;}
    else
        {return (fibonnaci(n-1)+fibonnaci(n-2));}
}

int main()
{
    int n=7;

    for(int i=1;i<=n;i++)
    {
            printf("\n%d",fibonnaci(i));
    }
}
