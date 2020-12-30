const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"admin.login":{"uri":"login","methods":["GET","HEAD"],"domain":"admin.lendme.test"},"admin.login.attempt":{"uri":"login","methods":["POST"],"domain":"admin.lendme.test"},"admin.logout":{"uri":"logout","methods":["POST"],"domain":"admin.lendme.test"},"admin.password.request":{"uri":"forgot-password","methods":["GET","HEAD"],"domain":"admin.lendme.test"},"admin.home":{"uri":"home","methods":["GET","HEAD"],"domain":"admin.lendme.test"}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    for (let name in window.Ziggy.routes) {
        Ziggy.routes[name] = window.Ziggy.routes[name];
    }
}

export { Ziggy };
