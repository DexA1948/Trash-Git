//Continuing on vector
//4]Vectors->Modifiers
/*
// vector assignment
#include <iostream>
#include <vector>

int main ()
{
  std::vector<int> foo (3,3);
  std::vector<int> bar (5,0);

  bar = foo;
  foo = std::vector<int>();

  std::cout << "Size of foo: " << int(foo.size()) << '\n';
  std::cout << "Size of bar: " << int(bar.size()) << '\n';
  return 0;
}
*/

#include<iostream>
#include<vector>
using namespace std;

void display(const vector<int> &v)
{
    cout<<"\nElements of vector are: ";
    for(auto& i:v)
    {
        cout<<i<<" ";
    }
    cout<<endl;
}
int main()
{
    vector<int> v(5,10);
    auto i = v.end();
    cout<<*i<<endl;
    display(v);
    v.pop_back();
    display(v);
    v.emplace(v.begin(),5);
    display(v);
    return 0;
}

/*
//Maps in C++
//implemented as red-black tree which is kind of self-balancing binary tree
#include<iostream>
#include<map>

using namespace std;

int main()
{
    map<string, int> marksMap;
    marksMap["Harry"]=98;
    marksMap["Jack"]=59;
    marksMap["Rohan"]=2;

    map<string, int>::iterator itr;

    marksMap.insert({{"Kozume",69},{"Kuroo", 87}});

    for(itr=marksMap.begin(); itr!=marksMap.end(); itr++)
    {
        cout<<(*itr).first<<" "<<(*itr).second<<"\n";
    }
}
*/
