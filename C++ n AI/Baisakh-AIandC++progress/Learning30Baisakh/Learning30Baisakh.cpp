//hello I'm back again and I'm again continuing on
//uniform cost search
//I'm also studying different things related to C++
//programming on the way

/*
//learning Trailing return types
#include <bits/stdc++.h>
using namespace std;

// A generic function which finds minimum of two values
// return type is type of variable which is minimum
template <class A, class B>
auto findMin(A a, B b) -> decltype(a < b ? a : b)
{
    return (a < b) ? a : b;
}

// driver function to test various inference
int main()
{
    // This call returns 3.44 of doubale type
    cout << findMin(4, 3.44) << endl;

    // This call returns 3 of double type
    cout << findMin(5.4, 3) << endl;

    return 0;
}
*/

#include <iostream>
using namespace std;

template<typename T1, typename T2>
auto sum(T1& t1, T2& t2) -> decltype(t1 + t2)
{
    return t1+t2;
}

int main(){

auto i = 1;

auto j = 1.3;

auto k = sum(i,j);

cout << k << endl;

}
//trailing return type is given as such
//auto and composite symbol ->
//auto is placeholder for return type
//we cannot simply do decltyoe(t1+t2) sum(T1& t1, T2& t2)
//as t1 and t2 type aren't yet instantiated
