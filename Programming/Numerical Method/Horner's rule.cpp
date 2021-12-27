//using horner 's rule to implement polynomial in C
#include<iostream>

using namespace std;

int horner(int n,int x,int a[])
{
    int result=a[0];

    for(int i=1;i<=n;i++)
    {
        result=a[i] + (result*x);
    }

    return result;
}


int main()
{
    int degree=4,x=7;

    cout<<"Insert degree of polynomial :\t";
    cin>>degree;

    int coefficients[degree+1];

    cout<<"\nInsert coefficients in ascending degree of x :\n";
    for(int i=0;i<=degree;i++)
    {
       cout<<"_.x^"<<degree-i<<"=";
       cin>>coefficients[i];
    }


    cout<<"\nValue of polynomial is: "<<horner(degree,x,coefficients);

    return 0;
}

