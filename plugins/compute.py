import sys
import pandas as pd
import numpy as np
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.metrics.pairwise import cosine_similarity


def get_title_from_index_bf(index):
	return df_breakfast[df_breakfast.index == index]["title"].values[0]
def get_title_from_index_meals(index):
	return df_meals[df_meals.index == index]["title"].values[0]
def get_title_from_index_snacks(index):
	return df_snacks[df_snacks.index == index]["title"].values[0]
def get_title_from_index_dinner(index):
	return df_dinner[df_dinner.index == index]["title"].values[0]

def get_index_from_bf(title):
	return df_breakfast[df_breakfast.title == title]["index"].values[0]
def get_index_from_meals(title):
	return df_meals[df_meals.title == title]["index"].values[0]
def get_index_from_snacks(title):
	return df_snacks[df_snacks.title == title]["index"].values[0]
def get_index_from_dinner(title):
	return df_dinner[df_dinner.title == title]["index"].values[0]

#bf_cal = sys.argv[1]
#lun_cal = sys.argv[2]
#din_cal = sys.argv[3]
sn_cal = 0
if(len(sys.argv)==5): sn_cal = sys.argv[4]

try:
    df_breakfast = pd.read_csv("indian_breakfast.csv")
    #print(df_breakfast.head(5))
    #print()
    df_meals = pd.read_csv("indian_meals.csv")
    #print(df_meals.head(5))
    #print()
    df_snacks = pd.read_csv("indian_snacks.csv")
    #print(df_snacks.head(5))
    #print()
    ref_meals_df = df_meals.filter(['s_no','name','carbs','protein','fat','total_cal','vn'])
    #print(ref_meals_df)
    #print()
    df_dinner = ref_meals_df.append(df_breakfast, ignore_index=True,sort=False)
    #print(df_dinner.head(5))
    #print()
except Exception as e:
    print("exc 1 -> ",str(e))
features=['name','carbs','protein','fat']


def combine_features(row):
    try:
        return row['name']+" "+row['carbs']+" "+row['protein']+" "+row['fat']
    except:
        print("Error",row)
        print()

df_breakfast["combine_features"]=df_breakfast.apply(combine_features,axis=1)

#print(df_breakfast["combine_features"].head(5))

df_meals["combine_features"]=df_meals.apply(combine_features,axis=1)

#print(df_meals["combine_features"].head(5))

df_snacks["combine_features"]=df_snacks.apply(combine_features,axis=1)

#print(df_snacks["combine_features"].head(5))

df_dinner["combined_features"]=df_dinner.apply(combine_features,axis=1)
    
#print("combined_attributes",df_dinner["combined_features"].head())

cv=CountVectorizer()
count_matrix1=cv.fit_transform(df_breakfast["combine_features"])
count_matrix2=cv.fit_transform(df_meals["combine_features"])
count_matrix3=cv.fit_transform(df_snacks["combine_features"])
count_matrix4=cv.fit_transform(df_dinner["combine_features"])

cosine_sim1=cosine_similarity(count_matrix1)
cosine_sim2=cosine_similarity(count_matrix2)
cosine_sim3=cosine_similarity(count_matrix3)
cosine_sim4=cosine_similarity(count_matrix4)

bf_user_likes="oats Idli"
snacks_user_likes="gavvalu"
meals_user_likes="tomota rice"
dinner_user_likes="sambar rice"

bf_index = get_index_from_bf(bf_user_likes)
meals_index = get_index_from_meals(meals_user_likes)
snacks_index = get_index_from_snacks(snacks_user_likes)
dinner_index = get_index_from_bf(dinner_user_likes)

similar_bf=list(enumerate(cosine_sim1[bf_index]))
similar_meal=list(enumerate(cosine_sim2[meals_index]))
similar_snacks=list(enumerate(cosine_sim1[snacks_index]))
similar_dinner=list(enumerate(cosine_sim1[dinner_index]))

sorted_similar_bf=sorted(similar_bf,key=lambda x:x[1],reversed=True)
sorted_similar_meals=sorted(similar_meal,key=lambda x:x[1],reversed=True)
sorted_similar_snacks=sorted(similar_snacks,key=lambda x:x[1],reversed=True)
sorted_similar_dinner=sorted(similar_dinner,key=lambda x:x[1],reversed=True)

i=0
for bf in sorted_similar_bf:
    print(get_title_from_index_bf(bf[0]))
    i=i+1
    if i>3:
        break
i=0
for meal in sorted_similar_meals:
    print(get_title_from_index_meals(meal[0]))
    i=i+1
    if i>3:
        break
i=0
for snack in sorted_similar_snacks:
    print(get_title_from_index_snacks(snack[0]))
    i=i+1
    if i>3:
        break
i=0
for dinner in sorted_similar_dinner:
    print(get_title_from_index_dinner(dinner[0]))
    i=i+1
    if i>3:
        break











