#include <iostream>
using namespace std;

int soma (int x, int y){
	int resultadosoma = x+y;
	return resultadosoma;
}

int subtracao (int x, int y){
	int resultadosubtracao = x-y;
	return resultadosubtracao;
}

int multiplicacao (int x, int y){
	int resultadomultiplicacao = x*y;
	return resultadomultiplicacao;
}

int divisao (int x, int y){
	int resultadodivisao = x/y;
	return resultadodivisao;
}

main(){
	float x,y, resultadosoma, resultadosubtracao, resultadomultiplicacao, resultadodivisao;
	
	cout<<"Informe x: ";
	cin>>x;
	cout<<"Informe y: ";
	cin>>y;
	
	resultadosoma = x+y;
	resultadosubtracao = x-y;
	resultadomultiplicacao = x*y;
	resultadodivisao = x/y;
	
	cout<<"\nSoma:"<<resultadosoma;
	cout<<"\nSubtracao:"<<resultadosubtracao;
	cout<<"\nMultiplicacao:"<<resultadomultiplicacao;
	cout<<"\nDivisao:"<<resultadodivisao;
}
