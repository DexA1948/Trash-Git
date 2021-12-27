//using secant method to solve x^2-4x-10=0 in C++

#include<iostream>
#include<stdio.h>
#include<math.h>

using namespace std;


double function(double x)
{
    return x*x-4*x-10;
}

double secantmethod()
{
    double x1=4,x2=2,x3;

    int iteration=10,count=0;
    double E=0.00001;

    do
    {
        x3=x2-((function(x2)*(x2-x1))/(function(x2)-function(x1)));
        printf("\nx1=%lf\tx2=%lf\tx3=%lf\terror=%lf\n",x1,x2,x3,fabs((x3-x2)/x1));
        x1=x2;
        x2=x3;
        count++;
        if(count>iteration){break;}
    }while(fabs((x2-x1)/x1)>E);

    return x3;
}

int main()
{
    cout<<endl<<"Root of equation is : \t"<<secantmethod()<<endl;
}
