#include <iostream>
using namespace std;

main(){
	
	float soma = 0;
	int qtd = 0;
	
	for(int i=0; i<11; i++){
		cout<<"informe a nota: ";
		cin>>i;
		soma=soma+i;
		qtd++;
	}
	cout<<"\nA media das notas eh: "<<soma/qtd;
}
