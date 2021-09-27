package Calculadora;

import java.io.*;
import java.util.Scanner;

public class Calculadora {
    public static void main(String[] args){
        float num1, num2, res;
        int op;
        Scanner read = new Scanner(System.in);
        System.out.printf("%nCalculadora by Jhonata Souza%nOperações:%n1. Adição%n2. Subtração%n3. Multiplicação%n4. Divisão%n0. Sair%nInfome o tipo de o tipo da operação:%n");
        op = read.nextInt();
        Operacoes calcula = new Operacoes();
        if(op == 1){
            System.out.println("Informe o primeiro valor: ");
            num1 = read.nextFloat();
            System.out.println("Informe o segundo valor: ");
            num2 = read.nextFloat();
            res = calcula.soma(num1, num2);
            System.out.println("Resultado: "+res);
        }
        else if(op == 2){
            System.out.println("Informe o primeiro valor: ");
            num1 = read.nextFloat();
            System.out.println("Informe o segundo valor: ");
            num2 = read.nextFloat();
            res = calcula.sub(num1, num2);
            System.out.println("Resultado: "+res);
        }
        else if(op == 3){
            System.out.println("Informe o primeiro valor: ");
            num1 = read.nextFloat();
            System.out.println("Informe o segundo valor: ");
            num2 = read.nextFloat();
            res = calcula.mult(num1, num2);
            System.out.println("Resultado: "+res);
        }
        else if(op == 4){
            System.out.println("Informe o primeiro valor: ");
            num1 = read.nextFloat();
            System.out.println("Informe o segundo valor: ");
            num2 = read.nextFloat();
            res = calcula.div(num1, num2);
            System.out.println("Resultado: "+res);
        }
        else{
            System.exit(1);
        }
    }
}
