/*
#include<iostream>
#include<list>

using namespace std;

class Graph{
    int V;//no of vertices
    list<int>* adj;
public:
    Graph(int V);//constructor
    void addEdge(int position, int node);//to add adjacent nodes
    void BFT(int start);//breadth first traversal of given graph in adjacent list format
};

Graph::Graph(int V){
this->V=V;
adj = new list<int>[V];
}

void Graph::addEdge(int position, int node)
{
    adj[position].push_back(node);
}

void Graph::BFT(int start)
{
    bool* visited = new bool[V];

    for(int i=0;i<V;i++)
        visited[i]=false;

    list<int> queue;

    int current=start;

    visited[current]=true;
    queue.push_back(current);

    list<int>::iterator i;

    while(!queue.empty())
    {
        current=queue.front();
        cout<<current<<" ";
        queue.pop_front();

        for(i=adj[current].begin(); i!=adj[current].end(); i++ )
        {
            if(!visited[*i])
            {
                visited[*i]=true;
                queue.push_back(*i);
            }
        }
    }
}

int main()
{
    Graph G(6);

/*
    G.addEdge(1,2);
    G.addEdge(1,3);
    G.addEdge(2,1);
    G.addEdge(2,4);
    G.addEdge(2,5);
    G.addEdge(3,1);
    G.addEdge(3,5);
    G.addEdge(4,2);
    G.addEdge(4,5);
    G.addEdge(4,6);
    G.addEdge(5,2);
    G.addEdge(5,3);
    G.addEdge(5,4);
    G.addEdge(5,6);
    G.addEdge(6,4);
    G.addEdge(6,5);
*/
/*
    G.addEdge(0,1);
    G.addEdge(0,2);
    G.addEdge(1,0);
    G.addEdge(1,3);
    G.addEdge(1,4);
    G.addEdge(2,0);
    G.addEdge(2,4);
    G.addEdge(3,1);
    G.addEdge(3,4);
    G.addEdge(3,5);
    G.addEdge(4,1);
    G.addEdge(4,2);
    G.addEdge(4,3);
    G.addEdge(4,5);
    G.addEdge(5,3);
    G.addEdge(5,4);

    G.BFT(0);

    return 0;
}
*/
