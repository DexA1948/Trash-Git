#include<iostream>

using namespace std;

float lagrangeinterpolation(float xp,float x[],float f[],float n)
{
    float LF,sum=0;
    for(int i=0;i<n;i++)
    {
        LF=1;
        for(int j=0;j<n;j++)
        {
            if(i!=j)
                LF = LF * ((xp-x[j])/(x[i]-x[j]));
        }
        sum = sum + f[i] * LF;
    }
    return sum;
}


int main()
{
    int maxx=20;
    float x[maxx],y[maxx],xp;
    int n;

    cout<<"Insert the number of data points (n)"<<endl;
    cin>>n;

    cout<<"Insert the data points"<<endl;

    for(int i=0;i<n;i++)
    {
        cout<<"x["<<i<<"] = \t"<<endl;
        cin>>x[i];
        cout<<"y["<<i<<"] = \t"<<endl;
        cin>>y[i];
    }

    cout<<"\nInsert the data point at which interpolation is required"<<endl;
    cin>>xp;

    cout<<"The value at point x = "<<xp<<" is : "<<lagrangeinterpolation(xp,x,y,n)<<endl;
}
