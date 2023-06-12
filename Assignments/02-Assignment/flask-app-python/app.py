from flask import Flask, jsonify

app = Flask(__name__)

@app.route('/')
def get_products():
    products = [
        {"Samsung": "Brand A", "country": "UK"},
        {"CR7": "Brand B", "country": "Portugal"},
        {"Messi": "Brand C", "country": "Argentina"},
    ]
    return jsonify(products)

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')
