#include<iostream>
#include<fstream>

using namespace std;

int main()
{
    ofstream fout;

    fout.open("sample.txt",ios::out|ios::trunc);

    string line;

    while(fout)
    {
        getline(cin,line);

        if(line == "-1")
            break;

        fout<<line<<endl;
    }

    fout.close();

    ifstream fin;

    fin.open("sample.txt");

    while(fin)
    {
        getline(fin,line);

        cout<<line<<endl;
    }

    fin.close();

    return 0;
}
