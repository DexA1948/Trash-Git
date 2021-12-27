//Newton-Raphson Method using C++ to find the root of
//equation x^2-3x+2=0

#include<iostream>

using namespace std;

float function(float x)
{
    return x*x-3*x+2;
}

float functionderivative(float x)
{
    return 2*x-3;
}

float newtonraphson()
{
    float x0=0;
    float x1;

    int iteration=100;

    for(int i=0;i<iteration;i++)
    {
        x1=x0-function(x0)/functionderivative(x0);
        x0=x1;
    }

    return x1;
}

int main()
{
    cout<<endl<<"Root of equation is : \t"<<newtonraphson()<<endl;
}
