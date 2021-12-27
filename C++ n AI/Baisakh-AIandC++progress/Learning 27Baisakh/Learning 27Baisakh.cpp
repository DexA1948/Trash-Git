//Learning about iterators from here
//https://www.geeksforgeeks.org/introduction-iterators-c/

// C++ program to demonstrate iterators
/*
#include <iostream>
#include <vector>
using namespace std;
int main()
{
    // Declaring a vector
    vector<int> v = { 1, 2, 3 };

    // Declaring an iterator
    vector<int>::iterator i;

    int j;

    for (i = v.begin(); i != v.end(); ++i)
    {
        cout<<&i<<endl;
    }

    // Inserting element using iterators
    for (i = v.begin(); i != v.end(); ++i) {
        if (i == v.begin()) {
            i = v.insert(i, 5);
            // inserting 5 at the beginning of v
        }
    }

    cout<<&i<<endl;

    i=v.begin();

    cout<<&i<<endl;

    //v.insert(v.begin(), 5); This Works

    v.erase(v.begin()+1);

    // v contains 5 2 3

    // Accessing the elements using iterators
    for (i = v.begin(); i != v.end(); ++i) {
        cout << *i << " ";
    }

    return 0;
}
*/

/*
#include <iostream>
#include <vector>
using namespace std;
int main()
{
    // Declaring a vector
    vector<int> v = { 1, 2, 3 };
    int arr[3]{1,2,3};

    // Declaring an iterator
    vector<int>::iterator i;

    int j;

    for (i = v.begin(); i != v.end(); ++i)
    {
        cout<<*i<<endl;
    }

    // Inserting element using iterators
    for (i = v.begin(); i != v.end(); ++i) {
        if (i == v.begin()) {
            i = v.insert(i, 5);
            // inserting 5 at the beginning of v
        }
    }

    //This shows the address of i and not the address it is pointing to
    //cout<<&i<<endl;

    //v.insert(v.begin(), 5); This Works

    v.erase(v.begin()+1);

    // v contains 5 2 3

    // Accessing the elements using iterators
    for (i = v.begin(); i != v.end(); ++i) {
        cout << *i << " ";
    }

    return 0;
}
*/
/*
#include <iostream>
#include <vector>

using std::cout;
using std::vector;
using std::endl;

constexpr int WIDTH = 4;

int main()
{
    int a=1, b=2, c=3, d=4;
    int *pointers_vec[WIDTH]{&a,&b,&c,&d};

    cout << "pointers_vec addresses:" << endl;
    for(auto &i : pointers_vec) {
        cout << *i << endl;
    }
    cout << endl;

    return EXIT_SUCCESS;
}
*/

/*
#include <iostream>
#include <vector>

using std::cout;
using std::vector;
using std::endl;

constexpr int WIDTH = 4;

int main()
{
    int *ptr;
    int arr[3]{1,2,3};
    ptr = arr;
    cout<<&arr<<endl;

    for(auto &i : arr) {
        cout << &i << endl;
    }

    cout << endl;

    return EXIT_SUCCESS;
}
*/

/*
#include<stdio.h>

int main()
{
    int arr[5] = {10, 20, 30, 40, 50};

    printf("arr = %p \t arr+1 = %p\n",arr,arr+1);
    printf("&arr = %p \t &arr+1 = %p\n",&arr,&arr+1);

    return 0;
}
*/

// C++ program to demonstrate that we can use auto to
// save time when creating iterators
#include <bits/stdc++.h>
using namespace std;

int main()
{
    // Create a set of strings
    set<string> st;
    st.insert({ "geeks", "for",
               "geeks", "org" });

    // 'it' evaluates to iterator to set of string
    // type automatically
    for (auto it = st.begin();
         it != st.end(); ++it)
        cout << *it << " ";

    return 0;
}
