from flask import *

from flask_wtf import FlaskForm 
from wtforms import StringField,TextAreaField,PasswordField,IntegerField
from wtforms.validators import InputRequired, Email, Length
from flask_sqlalchemy  import SQLAlchemy

from flask_admin import Admin
from flask_admin.contrib.sqla import ModelView

app = Flask(__name__)  
app.config['SECRET_KEY'] = 'qwertyuiop!@#$%^&*()'
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///database.db'
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = True
db = SQLAlchemy(app)

admin = Admin(app)

class Contact(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    name = db.Column(db.String(50))
    email = db.Column(db.String(50))
    contact = db.Column(db.String(50))
    message = db.Column(db.String(500))

class ContactForm(FlaskForm):
    name = StringField('Enter Name',validators=[InputRequired(), Length(min=4, max=50)])
    email = StringField('Email', validators=[InputRequired(), Email(message='Invalid email'), Length(max=50)])
    contact = IntegerField('Contact Number',validators=[InputRequired()])
    message = TextAreaField('Enter Message')

class LoginForm(FlaskForm):
    username = StringField('Username', validators=[InputRequired(), Length(min=4, max=15)])
    password = PasswordField('Password', validators=[InputRequired(), Length(min=8, max=80)])


class SecureModelView(ModelView):
    def is_accessible(self):
        if "is_admin_alive_bro_what_you_want" in session:
            return True
        else:
            abort(403)

admin.add_view(SecureModelView(Contact,db.session))

@app.route('/', methods=['GET', 'POST'])  
def index():
    form = ContactForm()
    if request.method == 'POST' and form.validate_on_submit():
        formdata = Contact(name=form.name.data,email=form.email.data,contact=form.contact.data,message=form.message.data)
        db.session.add(formdata)
        db.session.commit()
        flash("Your message has been sent")
        return render_template('index.html',form = form)
    return render_template('index.html',form = form)


@app.route('/login', methods=['GET', 'POST'])
def login():
    form = LoginForm()
    if form.validate_on_submit():
        if form.username.data == "admin" and form.password.data == "GOVIND@2357":
            session['qwertyuiop!@#$%^&*()'] = True
            print("Admin alive")
            return redirect(url_for('admin.index'))
        flash("Invalid username or password")
    return render_template('login.html', form=form)


if __name__ == '__main__':  
    app.run(debug = True,host='0.0.0.0',port=80)  