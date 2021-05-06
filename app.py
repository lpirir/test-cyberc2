import numpy as np
import pandas as pd

data = pd.read_excel(r'bd.xlsx', sheet_name='tabla3')

df = pd.DataFrame(data, columns=['Nombre de producto', 'Unidades vendidas'])

df.groupby('Nombre de producto')['Unidades vendidas'].agg(['min', 'max', 'mean'])

df.to_excel(r'bd_process.xlsx', index=False, header=True)
