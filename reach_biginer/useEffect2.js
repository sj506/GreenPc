import { useState, useEffect } from 'react';

function Hello() {
    // function byFn() {
    //     console.log('bye : (');
    // }
    // function hiFn() {
    //     console.log('hi :)');
    //     return byFn; // return 값으로 함수를 줄 수도 있음
    // }

    useEffect(() => {
        console.log('hi :)');
        return () => {
            console.log('by :(');
        };
    }, []);

    return <h1>Hello</h1>;
}

function App() {
    const [showing, setShowing] = useState(false);
    const onClick = () => setShowing((prev) => !prev);
    return (
        <div>
            {showing ? <Hello /> : null}
            <button onClick={onClick}>{!showing ? 'show' : 'hide'}</button>
        </div>
    );
}

export default App;
