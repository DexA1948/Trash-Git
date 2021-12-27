#include<iostream>
#include<stdio.h>
#include<math.h>

using namespace std;

double F(double x,double y)
{
    return x*x+x*y-6;
}

double G(double x,double y)
{
    return x*x-y*y-3;
}

double f1(double x,double y)
{
    return 2*x+y;
}

double f2(double x,double y)
{
    return y;
}

double g1(double x,double y)
{
    return 2*x;
}

double g2(double x,double y)
{
    return -(2*y);
}

double D(double x,double y)
{
    return (f1(x,y)*g2(x,y)-g1(x,y)*f2(x,y));
}
double Dx(double x,double y)
{
    return (F(x,y)*g2(x,y)-G(x,y)*f2(x,y));
}
double Dy(double x,double y)
{
    return (G(x,y)*f1(x,y)-F(x,y)*g1(x,y));
}

//newton method for solving system of non linear equations
int main()
{
    int iteration=10,count=0;
    double x0,y0,x1=3,y1=1;

    double E=0.00001;

    cout<<"Initial Guesses:\nx0="<<x1<<"\ty0="<<y1<<endl;

    do
    {
        x0=x1;y0=y1;

        cout<<"\nF="<<F(x0,y0)<<"\tG="<<G(x0,y0)<<endl;
        cout<<"f1="<<f1(x0,y0)<<"\tg1="<<g1(x0,y0)<<endl;
        cout<<"f2="<<f2(x0,y0)<<"\tg2="<<g2(x0,y0)<<endl;

        x1=x0-Dx(x0,y0)/D(x0,y0);
        y1=y0-Dy(x0,y0)/D(x0,y0);

        cout<<"x1="<<x1<<"\ty1="<<y1<<endl;
        cout<<"Error in X : "<<fabs(x1-x0)<<"\tError in Y : "<<fabs(y1-y0)<<endl;

        count++;
        if(count>iteration){break;}

    }while(fabs(x1-x0)>E && fabs(y1-y0)>E);

    printf("x=%lf,y=%lf",x1,y1);
}
