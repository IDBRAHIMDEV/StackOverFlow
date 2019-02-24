import MyStorage from "./MyStorage";

class User {

    login(url, data) {
        axios.post(`${url}/login`, data)
        .then(res => {
            console.log(res.data)
            MyStorage.storeToken(res.data.access_token, res.data.user);
            window.location = '/forum';
        })
        .catch(err => console.log('error: ', err))
    }

    signUp(url, data) {
        axios.post(`${url}/signup`, data)
        .then(res => {
           window.location = '/login';
        })
        .catch(err => console.log('error: ', err))
    }

    logout(url) {
        axios.post(url)
        .then(res => {
            MyStorage.clear();
           window.location = '/login';
        })
        .catch(err => console.log('error: ', err))
    }

    loggedIn() {
       return MyStorage.hasToken();
    }

}

export default new User;