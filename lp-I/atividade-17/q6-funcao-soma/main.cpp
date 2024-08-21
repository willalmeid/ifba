#include <iostream>
using namespace std;

int soma (int x, int y){
	int resultado = x+y;
	return resultado;
}

main(){
	float x,y, resultado;
	
	cout<<"Informe x:" ;
	cin>>x;
	cout<<"Informe y:" ;
	cin>>y;
	
	int soma=0;
	
	for (int i=x; i<y; i++){
		soma=soma+i;
	}
	cout<<"A soma dos numeros eh: "<<soma;
}
