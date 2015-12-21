# Programming-Language Notes

# Operand evaluation order

Firstly, there is no concept of left to right in operand evaluation order. This is not to be confused with left-to-right and right-to-left associativity of operators: the expression f1() + f2() + f3() is parsed as (f1() + f2()) + f3() due to left-to-right associativity of operator+, but the function call to f3 may be evaluated first, last, or between f1() or f2() at run time. 

`Order of Evaluation Operand` 

Variables : Fetch the value from memory
Constants : sometimes a fetch from memory; sometimes the constant is in the machine language instruction
Parenthesized expressions : Evaluate all the operators and operands first

When the operand is a function call then 

    a = 10
    assume that fun changes its parameter
    b = a + fun(&a)
    
    since a function is changing a two way parameter inside the function so there are certain side effects
    
Two possible solutions to the problem

    Write the language definition to disallow functional side effects
    No two-way parameters in functions
    No non-local references in functions
    Advantage: it works!
    Disadvantage: inflexibility of one-way parameters and lack of non-local references
    
Write the language definition to demand that operand evaluation order be fixed

    Disadvantage: limits some compiler optimizations
    Java requires that operands appear to be evaluated in left-to-right order
    
# Result of if(a<b<c)

One odd characteristic of C’s expressions:   
     
     a < b < c  is a legal expression, but the result is not what you might expect:
     
Left operator is evaluated, producing 0 or 1

The evaluation result is then compared with the third operand (i.e., c)

# Associate Array and how are they implemented

Associate arrays are unordered collection of data elements that are indexed by equal number of values called as keys.

    User Defined Keys must be stored
    
In Perl the implmentation :-

    $days = {'Mon' => 1, 'Tues' => 2, 'Wed' => 3, 'Thurs' => 4}

# What is jagged array and its implementation 

    public class Main {
    
        public static void main (string[] argv) {
        
            int jaggedArray[][] = new int[4][]
            
            jaggedArray[0] = new int[10];
            jaggedArray[1] = new int[5];
            jaggedArray[2] = new int[4];
            jaggedArray[3] = new int[3];

# keywords and reserved words

Keywords have a special meaning in a language, and are part of the syntax.

Reserved words are words that cannot be used as identifiers (variables, functions, etc.), because they are reserved by the language.

In practice most keywords are reserved words and vice versa. But because they're two different things it may happen that a keyword is not a reserved word (e.g. a keyword only has meaning in a special context, and can therefore be used as an identifier), or a reserved word is not a keyword (e.g. because it is reserved for future use).

Update: Some examples as given by others that illustrate the distinction:

    In Java, goto is a reserved word but not a keyword (as a consequence, you cannot use it at all)
    Fortran has no reserved words, all keywords (if, then, etc.) can be used as identifiers

* Keyword: It has some meaning and we can use in program.
* Reserved word: We can't use in program. They may be used in future. Example: goto

# Temporal Dynamic Scope


# Arrays bindings

`Static` - Here the memory is allocated for a variable, and it remains the same throughout the program

Subscript ranges are statically bound and storage allocation is static (before run time)

    static int myarray[3] = {1, 2, 3};
    
    advantage - Efficiency no dynamic allocation
    
`Fixed Stack-Dynamic`

Subscript ranges are statically bound but the allocation of memory happens at declaration time

    int store[3] = {1, 2, 3}

All the arrays without static modifier are Fixed Stack-Dynamic

`Stack Dynamic` 

Subscript ranges are dynamically bound and storage is also dynamic (done at run-time)

    list: array(1..len) of integers
    
`Fixed heap Dynamic`

similar to fixed stack-dynamic: Storage binding is dynamic but fixed after allocation. The memory allocation is done from the heap. 

In C/C++, you can use malloc and calloc to assign and free memory

Java has fixed dynamic heap memory

`Heap Dynamic` 

Python supports `Heap Dynamic`. Storage and subscript of the array is dynamically defined 

# Memory Allocation for 2D arrays

Access function for single 1D array 

`address(list[k]) = address (list[lower_bound])
+ ((k-lower_bound) * element_size)`



Now there are two ways to organize arrays in 2D. Row major and column major 

Row Major - Used in most languages 
Column Major - Used in Fortran 




# Ordinal Types 

In computer programming, an ordinal data type is a data type with the property that its values can be counted. That is, the values can be put in a one-to-one correspondence with the positive integers. For example, characters are ordinal because we can call 'A' the first character, 'B' the second, etc. The term is often used in programming for variables that can take one of a finite (often small) number of values. While the values are often implemented as integers (or similar types such as bytes) they are assigned literal names and the programming language (and the compiler for that language) can enforce that variables only be assigned those literals.

    var
      x: 1..10;
      y: 'a'..'z';


# Simple prolog operations

parent(albert, bob).

?- parent(X, bob)
* who is the parent of BOB

manager(rakesh, joe).

?- manager(X, joe) 

* who is the manager of joe


# 





            
            
    
    





























