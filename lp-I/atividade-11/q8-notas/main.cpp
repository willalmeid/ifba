#include <iostream>
using namespace std;

int main(){
	int nota=0;
	int qtd=0;
	double soma=0;

	while(nota!=999){
		cout<<"\n Digite sua nota";
		cin>> nota;
		qtd++;
		if(nota>1 && nota<10){
			soma=soma+nota;		
		}
	}
	qtd--;
	cout<< "\n quantidade foi: "<<qtd;
	cout<< "\n A soma foi: "<<soma;
	cout<< "\n A media foi: "<<soma/qtd;
}
