import Token from "./Token";

class MyStorage {

    storeToken(token, user) {
       if(Token.isValid(token)) {
           localStorage.setItem('Token', token);
           localStorage.setItem('user', user);
       }
    }

    getToken() {
        return localStorage.getItem('Token');
    }

    hasToken() {
        if(Token.isValid(this.getToken())) {
            return true;
        }
        return false;
    }
    
    clear() {
        localStorage.removeItem('Token');
        localStorage.removeItem('user');
    }


}

export default new MyStorage;