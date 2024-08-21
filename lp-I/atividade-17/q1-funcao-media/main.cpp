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
	resultado=x+y;
	cout<<"A media dos numeros eh: "<<resultado/2;
}
