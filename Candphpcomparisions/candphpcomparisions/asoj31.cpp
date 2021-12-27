#include<stdio.h>
#include<iostream>

using namespace std;

int sum(int a, int b)
{
    return a + b;
}

class People
{
public:
    int a, b;

    int sum(int a, int b)
    {
        return psum(a, b);
    }

private:
    int x = 10;

    int psum(int a, int b)
    {
        return a+b+x;
    }
};

int main()
{
    int a = 10, b = 20;

    //cout<<sum(a, b);

    People p;
    p.a = 10;
    p.b = 20;

    cout<<p.sum(p.a, p.b);

    return 0;
}
