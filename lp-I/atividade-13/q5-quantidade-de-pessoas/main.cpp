#include <iostream>
using namespace std;

main(){
	
	int qtd=0;
	
	for(int i=0; i<999; i++){	
		cout<<"informe o peso(digite 999 para parar): ";
		cin>>i;
		if(i>50)
			qtd++;		
	}
	qtd--;
	cout<<"\nA quantidade de pessoas com mais de 50kg eh: "<<qtd;
}
