//bisection method using C++ to find the root of
//equation:x^2-4x-10=0

#include<iostream>

using namespace std;

float function(float x)
{
    return x*x-4*x-10;
}

float bisection()
{
    float x1=-2,x2=-1;
    int iteration=100;

    float x0=(x1+x2)/2;

    if(function(x1)*function(x2)>=0)
    {
        cout<<"Invalid Interval"<<endl;
        return 0;
    }

    for(int i=0;i<iteration;i++)
    {
        x0=(x1+x2)/2;
        if (function(x1)*function(x0)<0)
        {
            x2=x0;
        }
        else
        {
            x1=x0;
        }
    }

    return x0;
}

int main()
{
    cout<<endl<<"Root of equation is : \t"<<bisection()<<endl;
}

