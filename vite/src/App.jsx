import { useState, useEffect } from 'react';

function App() {
    const [loading, setLoading] = useState(true);
    const [movies, setMovies] = useState([]);
    const getMovies = async () => {
        const json = await (
            await fetch(
                `http://kobis.or.kr/kobisopenapi/webservice/rest/boxoffice/searchDailyBoxOfficeList.json?key=f5eef3421c602c6cb7ea224104795888&targetDt=20120101`
            )
        ).json();
        console.log(json.boxOfficeResult.dailyBoxOfficeList);
        setMovies(json.boxOfficeResult.dailyBoxOfficeList);
        setLoading(false);
    };
    useEffect(() => {
        getMovies();
    }, []);

    return (
        <div>
            <ul>{loading ? <h1>Loading...</h1> : <Ctnt movies={movies} />}</ul>
        </div>
    );
}

function Ctnt(props) {
    return props.movies.map((movies) => (
        <div key={movies.rnum}>
            <li>
                {movies.rank}. {movies.movieNm}
            </li>
        </div>
    ));
}
export default App;
