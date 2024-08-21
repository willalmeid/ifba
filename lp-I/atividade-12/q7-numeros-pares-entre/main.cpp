#include <iostream>
using namespace std;

main( ) {
	int a, b, qtd=0;
	
	cout<<"informe a \n";
	cin>>a;
	cout<<"informe b \n";
	cin>>b;


	for (int i=a; i<=b; i++){
		if(i%2==0)
		qtd++;
	}
cout<<qtd<<"\n";
}
