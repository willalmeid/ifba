#include <iostream>
using namespace std;

main(){
	
	int a=0, b=0, qtd=0;
	float soma=0;
	
	cout<<"informe a: ";
	cin>>a;
	cout<<"informe b: ";
	cin>>b;
	
	for(int i=a; i<=b; i++){
		cout<<i<<"  ";
		soma=soma+i;
		qtd++;
	}
	
	cout<<"\nA media entre os numeros eh: "<<soma/qtd;
}
