#include <iostream>
using namespace std;

int soma (int h, int m){
	float resultadoH = 72.7*h-58, resultadoM = 62.1*m-44.7;
	return resultadoH;
	return resultadoM;
}

main(){

	float m, h, resultadoH, resultadoM;
	int sexo=0;
	
	cout<<"Informe o sexo (1 para homem e 2 para mulher):";
	cin>>sexo;
	
	switch(sexo){
		case 1:
			cout<<"informe a altura:";
			cin>>h;
			resultadoH= 72.7*h-58;
			cout<<resultadoH;
			break;
		case 2:
			cout<<"informe a altura:";
			cin>>m;
			resultadoM= 62.1*m-44.7;
			cout<<resultadoM;
			break;
		default:
			cout<<"ERRO";	
	}
}
