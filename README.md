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


