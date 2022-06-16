app.get('/chat', auth, (req, res) => {
    res.render('chat.html');
});

let { AccessToken } = req.cookies; // 클라이언트의 cookie.accesstoken
if (AccessToken == undefined) {
    console.log('로그인을 진행해주세요');
    //res.redirect('/?msg=로그인을 진행해주세요')
    res.json({ result: false, msg: '로그인이 필요합니다' });
    return;
}
