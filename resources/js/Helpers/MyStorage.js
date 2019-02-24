import Token from "./Token";

class MyStorage {

    storeToken(token, user_id, user_name) {
       if(Token.isValid(token)) {
           localStorage.setItem('Token', token);
           localStorage.setItem('user_id', user_id);
           localStorage.setItem('user_name', user_name);
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