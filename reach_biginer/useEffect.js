import { useState, useEffect } from 'react';

function App() {
    const [counter, setValue] = useState(0);
    const [keyword, setKeyword] = useState('');
    const onClick = () => setValue((prev) => prev + 1);
    const onChange = (event) => setKeyword(event.target.value);
    console.log('I run all the time');

    useEffect(() => console.log('CALL THE API...'), []); // 한번만 실행됨
    useEffect(() => {
        if (keyword !== '' && keyword.length > 5) console.log('SEARCH FOR', keyword);
    }, [keyword]);

    //keyword 가 변화할 때만 실행된다는 것을 알리는 문법 , [] = 한번만

    return (
        <div>
            <input value={keyword} onChange={onChange} type="text" placeholder="Search here...." />
            <h1>{counter}</h1>
            <button onClick={onClick}>Click me</button>
        </div>
    );
}

export default App;
