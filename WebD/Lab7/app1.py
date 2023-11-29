import streamlit as st
import pyspark
import pandas as pd
def get_multiple_inputs(n_inputs):
  dic = {}
  for i in range(n_inputs):
    input_label_date = f"Input year {i + 1}"
    input_label_temp = f"Input temperature {i + 1}"
    input_date = st.date_input(input_label_date)
    input_temp = st.number_input(input_label_temp)
    if input_date not in dic.keys():
      dic[input_date] = input_temp
  return dic

# Get the number of inputs from the user
n_inputs = st.number_input("How many inputs do you want?", min_value=1)

# Get the inputs from the user
inputs = get_multiple_inputs(int(n_inputs))
print('Dic',inputs)
# Display the inputs to the user
st.write("The inputs you entered are:")
for input_date,input_val in inputs.items():
  st.write('Date : '+str(input_date)+" Temperature : "+str(input_val))

def maximum():
    spark = pyspark.sql.SparkSession.builder.getOrCreate()
    data  = {'date':list(inputs.keys()),'temperature':list(inputs.values())}
    df = spark.createDataFrame(data) 
    df.show()
    max_temperature = df.agg({'temperature': 'max'}).collect()[0][0]
    st.write("The maximum temperature is"+max_temperature)

st.button("Submit",on_click=maximum())