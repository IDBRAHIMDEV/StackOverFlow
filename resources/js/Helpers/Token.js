

class Token {

    payload(token) {
        if(token) {
          const payload = token.split('.')[1];
          return JSON.parse(atob(payload));
        }

        return false;
        
    }


    isValid(token) {
        const myApi = 'http://localhost:8000/api/auth/login';
        const payload = this.payload(token);
        return (payload.iss == myApi)
    }

}


export default new Token;


