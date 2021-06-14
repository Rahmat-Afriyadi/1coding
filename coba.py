class Node:

    def __init__(self, data):

        self.left = None
        self.right = None
        self.data = data

    def insert(self, data):
# Compare the new value with the parent node
        if self.data:
            if data < self.data:
                if self.left is None:
                    self.left = Node(data)
                else:
                    self.left.insert(data)
            elif data > self.data:
                if self.right is None:
                    self.right = Node(data)
                else:
                    self.right.insert(data)
        else:
            self.data = data

# Print the tree
    def tampilAnak(self):
        print("anak kiri adalah ", self.left.data) if self.left != None else print("anak kiri adalah ",self.left)
        print("anak kanan adalah ", self.right.data) if self.right != None else print("anak kanan adalah ", self.right)

    def PrintTree(self):
        if self.left:
            self.left.PrintTree()
        print(self.data)
        if self.right:
            self.right.PrintTree()


# Use the insert method to add nodes
pohon = Node(27)
angka = [14,35,31,10,19]
for i in angka:
    pohon.insert(i)

print("root adalah ", pohon.data)
pohon.tampilAnak()
print("Node adalah ", pohon.left.data)
pohon.left.tampilAnak()
print("Node adalah ", pohon.right.data)
pohon.right.tampilAnak()
