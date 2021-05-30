jl1, jl2, jl3 = (2, 4, 5)
m, n, p = (2, 2, 2)
L = 2
B = 0x21

desimal = (
    ((m-1) * (jl2*jl3)) +
    ((n-1)*(jl3)) +
    (p-1)
) * 2

print("Desimal adalah : ", desimal)
print("Hex adalah : ", hex(desimal))

hasilAkhir = hex(B+desimal)
print(hasilAkhir)

print(hex(285))
