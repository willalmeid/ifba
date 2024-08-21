#include<iostream> 
using namespace std; 

int main( ) {
	int aluno, media = 0, acimamedia = 0;
	bool teste = 0;
	float soma = 0;
	
	cout << "\n numero de alunos: ";
	cin >> aluno;
 
	float nota [aluno];
 
	for (int i = 0; i < aluno; i++) {
		cout << "Digite a nota do aluno: ";
		cin >> nota [i];
		soma = soma + nota [i];
	}

	media = soma / aluno;
	cout << "\n    "<< media;

	for (int i = 0; i < aluno; i++){
		if (nota [i] > media) {
			acimamedia++;
			teste = 1;
		}
	}
	cout << "\n A quantidade de alunos acima da media sao: " << acimamedia;
	if (!teste)
		cout << "\n Nao ha nenhum aluno com nota acima da media.";
}
