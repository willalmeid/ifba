#include <iostream>
using namespace std;

main(){
	
	int a, b;
	cout<<"Informe o numero a: ";
	cin>>a;
	cout<<"Informe o numero b: ";
	cin>>b;
	
	for(int i=a; i<=b; i++){
		cout<<i<<"   ";
		if (i%2==0)
			cout<<"Par \n"; 
	    else
	    	cout<<"Impar \n";
	}
}
