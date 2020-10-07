# Atividade Avaliativa 21/09/2020

## Aluno: Jhonata Souza Costa

### Importando o numpy


```python
import numpy as np
```

### Definindo um Array


```python
a = np.array([[1, 2, 3],[4, 5, 6]])
```


```python
a
```




    array([[1, 2, 3],
           [4, 5, 6]])



### Criando uma Array com o numeros aleátorio


```python
b = np.random.random([5])
c = np.random.random([5])
```


```python
print("Array 1 Aleatoria: ",b,'\n',"Array 2 Aleatoria: ",c)
```

    Array 1 Aleatoria:  [0.36281721 0.93239507 0.8437139  0.57536187 0.16888301] 
     Array 2 Aleatoria:  [0.89616333 0.98887531 0.91537946 0.17653562 0.27810126]


### Usando operações aritimeticas com os arrays

##### Adição


```python
b + c
```




    array([1.25898054, 1.92127038, 1.75909336, 0.7518975 , 0.44698426])



##### Subtração


```python
b - c
```




    array([-0.53334612, -0.05648024, -0.07166556,  0.39882625, -0.10921825])



##### Multiplicação


```python
b * c
```




    array([0.32514348, 0.92202247, 0.77231837, 0.10157187, 0.04696658])



##### Divisão


```python
b / c
```




    array([0.40485612, 0.94288436, 0.92170945, 3.25918281, 0.60727163])



### Matriz


```python
z = np.array([[7,4,9], [3,8,9]])
print(z)
```

    [[7 4 9]
     [3 8 9]]


##### Matriz Transposta


```python
z.transpose()
```




    array([[7, 3],
           [4, 8],
           [9, 9]])



##### Matriz Inversa


```python
y = np.array([[73,12,9],[14,8,9],[98,45,12]])
print(y)
```

    [[73 12  9]
     [14  8  9]
     [98 45 12]]



```python
w = np.linalg.inv(y)
print(w)
```

    [[ 0.02009756 -0.01697561 -0.00234146]
     [-0.04643902  0.00039024  0.03453659]
     [ 0.01001626  0.13717073 -0.02705691]]


##### Matriz Determinante


```python
g = np.linalg.det(y)
print(g)
```

    -15375.0

