package Calculadora;

public class Operacoes {
    float result;
    public float soma (float num1, float num2) {
        result = num1 + num2;
        return result;
    }
    public float sub (float num1, float num2) {
        result = num1 - num2;
        return result;
    }
    public float mult (float num1, float num2) {
        result = num1 * num2;
        return result;
    }
    public float div (float num1, float num2){
        result = num1 / num2;
        return result;
    }
}
