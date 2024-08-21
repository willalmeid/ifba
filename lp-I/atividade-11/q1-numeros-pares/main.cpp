#include <iostream>
using namespace std;

main( ) {

	int a, b;
	
	cout<<"informe um numero par \n";
	cin>>a;
	cout<<"informe um numero maior que o anterior\n";
	cin>>b;
	
	while(a<b){
		a=a+2;
		cout<< "\n"<<a;
	}
}
