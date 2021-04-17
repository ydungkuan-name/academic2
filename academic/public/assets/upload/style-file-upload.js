


$(document).ready(function(){

var icon_doc_file = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAACXBIWXMAAAsTAAALEwEAmpwYAAAR7ElEQVR42u2deXRU1R3H85/YI2pPTy162kN7XI8GN1CwtqigQC1aitCKgmDbAxTFsCirIAoSRT1VZJFFEpYAQbYARmQnLAFkT1gSwpqQsGSZrGSbub13IAhh7p2ZbDPz3ud7zufwz7wMM7m/z7vvvvt+CQsjhBBCCCGEkODPQ32jGz3UO6qLZIZkjyRXUiEREPrc23Nq5S3th/ZgpJPrC7931G2ScZI8CsW63NNzimjUdrDzlnZIgPxc/C9JMikQmwigzSAkQMLCnh0zRhX/aImL4rCZAJAAkQNiPEVhYwEgAVsXfy8KAgFcZrCzMRKwVfE3lRRREAigmgS6Ux32EMAibwOlZcS8ssjYnYUJSRklqRm5+cezHA4IfRZuOFjgWQCXJXALErB88d8vcZqKf+C0jQUFJWXlglguW5NOOvUCGCRudq8JDEMCFhZApKn434/eWiDHiYtSsacAfl4YRAJWFUCyrvg7jFxcXFHprKBMbC6AKgm0RwKWSngf924/7T3/uMS0YkoEAVy3JoAELHX2b2GY/lcWXSovpUQQADMB6wrgBZ0AWkXEOCgPBMDCoLUF0FEngGfeW4gAEIDxcqAxMwEEQOwqgMszASSAAIhNBXBVAu2GvU41IQBiQwFcXRNoP+w1KgoBEBsK4Jq7A0gAARBbCuDqTGA4EkAAxI4C4HIAARCbC+AaCXSjwhAAsaEAkAACIDYXABJAAMTmAnBLoA0SQADEtgJAAgiA2FwAXA4gAGJzASABBEBsLoArEqhEAhYXQGpGrli27ZhYlJAC9cjKHWkiK7copARQJYHGSMCaAhi3YAf99huQR/vNFrGbj4aUAJCARQUQv+sERRkAHu4bLU5kOUJKAFcvB9oNe5VKtIgAhszcTEEGiOi1ySEnACRgMQEMj0qgGAPEvPWHQ1IA1ywMIoFQF8DmpHSKMQA8/tYccTa7MGQFwEzAQouA0+MPuBemKMyGoVVEjFi391TILQIaFgb/SWWG+G3A7PwSsTU5Q2w6cAbqkR1HMkXxpfKQuw3ogwT+QXWyEYhYcCMQEkAABAEgAQRAEAASQAAEAXiTQDskgACILQWABBAAsbkAuBxAAMTmAkACCIDYXAA/bxsejgSCWQD0A6AfABKwqQDoB0A/gAa8HOhKFQeRAOgHQD8AJGBjAdAPgH4ASMDGAqAfAP0AkICNBUA/APoBBFYCw5FAoBcB6QcQWv0ATmbluIZOXSFCid+/OqG0Sefxojp3vhJZcXePSc2p7ADfBqQfQOj0AwjFqLFpkGJHKpuNQAQBEARAEABBAAQBEARAEABBAAQBEARAEAACQAAEASAABEAQAAKoIwHsP37BvTc9ek0ygEeWbz8m8gpLEYCVBOByucSIqC1s0QXftjEPiBG7UrIQgFUEEJeYxsAGv3huSKyoqHQiACsI4N0ZmxjU4DfJp7IRgBUEMDKa6T/4z7GzeQjACgJIPJzJgAa/6DI2TrhcrAFY5i7AvA2HRfO35zK4wafiT79YwCKg1W4DFpaUiX1p590rvACeUNN+f8/8CICNQIQgAARAEAACQAAEASAABEAQAAJAAAQBIAAEQBAAQQAEARAEQBAAaWAB0A8A6AdgQwHQDwDoB2BjAdAPAOgHYGMB0A8A6AdgYwHQDwDoB2BjAdAPAOgHYPO7APQDAPoB2Pw2IP0AgH4AbAQihI1ACIAQBIAACEEACIAQBIAACEEACIAQBIAACEEACIAQBGABAdAPAOgHYEMB0A8A6AdgYwHQDwDoB2BjAdAPAOgHYGMB0A8A6AdgYwHQDwDoB2DzuwD0AwD6Adj8NiD9AIB+AGwEIoSNQAiAEASAAAhBAAiAEASAAAhBAAiAEASAAAhBAAiAEARgAQFsO3RWTIs/ICav3Afgkfkbj4hzecUIwEoCqHS6xIBvNrDNFXyiRf+5YmtyBgKwigAWb0llYINftB68QJRV0A/AEgIYPJ1+AOA/SScvIgArCGD0nK0MaPCb41kOBGAFAexOPSfC+0QzqMFnukWuYg3ASncBlm5LFa0iYhjc4JUeE+LFudxiBGC124Cl5ZUiJSNXHDqdDeCRzJxC9gGwEYgQBIAACEEACIAQBIAACEEACIAQBIAACEEACIAQBIAACEEAwS4A+gEA/QBsKAD6AQD9AGwsAPoBAP0AbCwA+gEA/QBsLAD6AQD9AGwsAPoBAP0AbH4XgH4AQD8Am98GpB8A0A+AjUCEsBEIARCCABAAIQgAARCCABAAIQgAARCCABAAIQgAARCCABAAIQigtmnUZtBDko8kayTJkpTq/OL5dzMatx8uPHH7X0Y4m70RKQCCDTU2deNWjWlPY12SJFkt+eCmtoPus3LhN5F8J3FJBADcgFMyT/JrqxX/I5IsfsEAPnG6UZuBD1il+H8rOc8vFcAvzkjusIIAfuCXCVAjYkO9+J/ilwhQY9R6WXgoC2Ayv0SAWhEZygLYxy8QoFYkhLIAsvkFAtSKk6EsgAJvH/DuHpPEPT2nANiOP3Sf6IsAzlpaAA/+51saUYIteeDfMxAAAgAEgAAAEAACAEAACAAAASAAAASAAAAQAAIAQAAIAAABIAAABIAAABAAAgBAAAgAAAEgAAAEgACCkskr92n/sMRn3+2iMBAAAkAAgAAQAAIABIAAEAAgAASAAAABIAAEAAgAASAAQAAIAAEAAkAACAAQAAIIBp4aMF8MnLZRfB23V3y7+qCYsGiX6DRmeb0JoPnbc8Qbn8WLD+ZuE18u2yMmLt8rIhfuEG9NWieeeXdhnX2u8D5R4m9jlokhMzeLzxf/5P586t/B0zeJDiMX+/QzHvnvbPHse7FannxnnsfjWg9eoD2mLj8jAkAANUYN3nnrD4vS8kqPxb1+32nx9KD5dSaAl0YvFXGJaaLoUrn257lcQuxLO+8WUngNP1eL/nPdYsnMKRKmpGbkipHRW0SzPtFGARw7m6f9GT+lZN1wzPPDFolKp0t7zKKEFASAAAKLOhOlGQZ2VY5nOsT8jUdqJQB1Jv5KFmR5pVP4k+2Hz4o/yzOpP5+r67gVIv1ioV/vs/Noplt0up/55herjcd3+nD5da+fKWdRuuQXl4k/DVqAABBA4Hi032yRfOqizwXidLlqJYAFBoF4y8lzDtHaxymzKv5Cw+zClCNnctwzB93PXr37pPbY2M1Hr7u8ySsq1b724wU7WANAAIHlf0t3i7qKNwGoAV/b7E49J5r1jfayjhEjsnKLavU+MRsOa39+WzmtLymr8HhccWmFaBkR437dqNlbjZccD/edjQAQQOBo8fZc4SguNRZCWmae+zq8QE5XayMAVTSXNEWjUiEvCQ6dzhb7j1/QFldVxs1PNM8yNplnGTkFl0RKeq4oKdW/T3mF0zjb+Gr5Hu2xahFTveZoeo72NepSgrsACCCgDJuVoB2gZRWVos/ENVdf+1i/Oe6V85oKQJ1RdVGF/8Lw766+Vp1BTdPsC45i94Kcp/dRq+q69QV1+TJ6zjYRfmWhTy18qsVNXdRrdZ/nsbfmiDMXCrSXKr0+/0H7c3+Un43bgAgg4JiKLGpNksdjvt91wm8BqGLVzSDUmb/9iBtvwz0uC8y0ct9v0jqP7xUZu1N7zJKtqTe8Xi0sqrO9p6iZhOn7U7cqddEtPqpZkLozgAAQQMAxXSdXX82uInpNst8C6DEhXntMQlKG9v83xXDLUd2N8HTMpoNntMf0lGdlT8ccOHHB4+vX7j3l9TvcfDDdr7WFSSv2sREIAQTB9X//uUK3nl9YUua+XVdXAhhvWPxT19I1ueWm1iU8Sk0za1DTfzWr8HRMX3mpM2bu9hvo/eUar9/ji+8vcV8u+ZKM7ELt/wEBIIAGRe1+0+Voeq72uJoIYNaPSdpjhs7crH0vNVXWRc1eqr9ebeLRbbq56Cipt+9yRvxBnwQQMXUDW4ERQHDQ+aM47UDdc+x8nQpg4aaj2mP6T16vfa9WA2K0x6k1hRu3Fc/Vvv70hYJ6+y6fkLOp83nFxuLfcSSTZwEQQPDw4qgl+i2tqecaTABDDDOAp0wCKCnzeFtTlzP1KIDnhsSK4tJyL7so87R3LhAAAmhw2g7VT6+TTl6sUwFEGS4BxsYk1ugS4Jw843q6BHDqLgHy6+8SwHRn5Nqoh48QAAIICtQ2VdN99roUwCeGW3O6242KXl/o76WrlXtPx5zLLfZ7EbA2mO73V4968OlZOVtAAAggKDBdt6oZQl0J4E1DIaudf7r/n2nj0aJr9txfS0JSut+3AZdtO+bejFSdqav2e308WG3p9Serdh5HAAggOFhn2AU3URafp2OWbz/mtwDUmbdYs+3WJc/MnvYcqGPO5uif5BvwjecVdfV/8GcjkHoYyqF5YGfBRvNGINPMRre3wC2iz+IRAAIIPKoJhy6qL4Aqsqr9AK0iYty9AFw1fBpwqSw+XU5kOdzNOqpe+8eB88WaPae0r1dP2Omm823kFFt3K1CtD4yI2nL1M6kz+Oy1h7Tv81HMdu3nUVuO1UKk7o6DWhjU7TBMscCDQAjAAgJQe+6LvDwym1dYKjIuFrq37NbmYaC/jlpi/BmuK4WjptS6wqmKeoLR9LmWGGSjkl1wyf2gTr7hASf1f33OcL0etz3N8DDQTp9fgwAQQND2+Kvrx4HVNtjaRm1SUtN20/uoJhvZ+SW1eh/T9L/7p98L3USosKT8amuwLuNWGG9jtg7hdmAIwCICUE+1qQYYPheg4bXeBKBu0/1oeADJW9SipacHh3RF6u2xYlNDkCc0DUEe7htt/L7UJcW1r1f9C3RRi48IAAEEnDZDY93X4b7sZVev1Z1dfekIpK671aPBLr/P/Dk+N++s4nUpAXVL05/sSskytukaOz9R3y3J6bpBUGr7r6nn4WufrEIACCAI1gOuNAXVnTU3J6WLZ967PGVV21pr2xT0jQnxYtuhs8YWY1XSUavt3qb92u3EETFievwBdxMQc7uxfHcHH1NTUCUGh6HFl7qrcsOsR84YMgx9CdXtRm8djhAAAmjQ7sD9vl4rPl20y30rUK2EX7tCX3WLTr2uOjUpUiWVQVfakCsBqWfwVSPND+dtd19D655K9Be16t4tcpUYI3/ulJX73Q8oqceNVdHrHn329N38ddRSLWrrsu4zmo6rqdwQAAIAQAAIAAABIAAABIAAABAAAgBAAAgAAAEgAAAEgAAAEAACAEAACAAAASAAAASAAAAQAAIAQAAIAAABeBXAbzp/LJp0Hg9gO+74+zgEAAAIAAAQAAAgAABAAACAAAAQAAIAQAAIAAABhEZub9F51q8ebefwlzuefj3vd69+ITzxQK+JJTNXJQqAYEONTd24VWO6JrXwyxadZoaFcu66t9lrkhyJ8JWmLTsWG/4QhkMQEoRRY1M3btWY9qcGJLmSHmFhXcNCPvKDNJEsQwAEAfjECsldYVbLldlANgIgCMAjOZY56+typw+zAQRAbCgAdda/M8wuMc0GEACxkQCsf9b3dzaAAIhNBBBnq7O+r7MBBEAsLoArZ31SfTawFAEQiwsg7q57OOubZgPdmrZ6+QwCIJYSQKuX0+XY7k6F+5AH/zWtEwIgVhKAGtNUto+RX1hHBECsJAA1pqlsBEAQAEEABAEQkwBe0H2RrSJiEAAJyrSUY9MggA5Utu8CaGH4IiuLLpVfYriRYIoak2psGsZtCyrbx4T3mXWb/MJcui8zLjGtiCFHginLtx8rMhS/K7x31K1Utn+zgGTdF9ph5OLi8kpnBcOOBEPKK5wVakwaBJBERfsvgEjT31UbGb2lQH73LoYfCXBcI6O3Fnj5O4DjqWj/BXC/xGn6Ygd8s6Egv7isnDFIApGCkrJyNQa9FL8aw/dR0TWTQKy3v7D65DvzysYv3FGYkJRekpqRm388y+EAqC/UGFNjTY05NfZ8+CvAC6nkmgugqaSIPyUNIYoau02p5NpJoBcDCUKUnlRw3UhgPIMJQgwW/uoqXbsuUhIYbdobABAkqDH6QfPe0yjcenpGIJNBBkFKluQlKrU+dwn2jr5VfsljJbkMOAgS1FgcJ7mNCm242cBNklck0yW7JTmSCgYj1DPqvn7elTGnxl6Xh/rMupmKJIQQQgghhIRA/g/eBFONRmNLqwAAAABJRU5ErkJggg==';
var icon_pdf_file = 'data:image/png;base64,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';
var icon_delete_file = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAABmJLR0QA/wD/AP+gvaeTAAADbUlEQVRIia2WS2xUZRTHf+e706GdaaeUcVrDgrZEYkHTOJaGWmLAhSaE2FZNU8skHdq6UAJRgw+CielKcIEGfCyMTNuoPITg0EYWRBMfUUhEUlg0BkxaGk2xUi32RVt6j4tp6XS4c0eCZ3OT7/zP/3e++z3uFTKEggzURR9WpQrVIhFTqGoPIVzFts6WdLefz+Qh6RKXN0UCHq9np8BWYIWLx4CKtE/ZZl9ZV2z0P0P6a6IR4F2EUKYuk2JIhZdK452HXSHa1mb6z/ftEeG1OzBPMdS9K8Ir35C2Nnt+zJMsuFsAgCK7Bnr6FNi9AJ4H1EQjCJ/eDSCZpSpbSrs6jgAYgF9qWvIQ9qUqrUAevqoKMMbZyhh8j6zFCuSlZkTQA5c3RQK3IEtk9hWgKFVZ0LqF0K4dBF+IOjKCz0cJvb6dgpbG25NCyJtlvQxgFMRAs5PJ5LkeUCX38Q3kP7N5US7w9GZyn9gAqkyeu+DYhArNCmK11EUrFF51Es0M/I4YQ/aDZWSXr+Hm4B/MXPkNX3VlYnYijBw9yeiprx0hIEtHVofjHlVd53ImGTkSx1MUwr+xmuD2Vkwgj4KmehBh/JsfuX70ZNpaAGyqDMhyV5Eqw+8d5MbFXsSbxbLnIojXy1TvJYY/iIGqa7lgLzcoy9xbAZ2dZfjDjgVDVa4d+BiduZmpFJB7DIbhjDLLIrhtK8jcaxUhuKMVyfK4FwIq/GlQHXQnJAyzy9eg09P8dfAQOj1D9gP3E9zWvABOTxk02NZZN83Shlr8G6sTa/N+jNHu01zb/xGo4n9sPfn1T7ozLHPGzH0P+p0E/kfXkd9QC8Dfnxxn/LtEPxM//MTIZycSTTQ+hW99ZTrElZVfxC6YxIyk00mSUxkGEcZOf8s/J75clLt+vJuxr74HEXxrH3JECBJLPIGh+vrciWnfr6RcLSbXz5LVq5j8+SLY9u0ulkVORTlTvZewx8ZTs0M31LqvrCs2emvV+uqijaIcSjPvOw0V4dnieOfnMHdBApTGOw8r8vb/BHlrHrAIAlASLtkt6F7A/RinDxVhT3G49M3kQcdN3lfb1CDIfhyuf5e4KsKLyTNwhUBiM0xO5exUoRmk2MW8X6A9xzvxTuGxY2NOggzHdc6lpimsRqpQ7jVQaEPivws5Uxrv6MlU/y9zrCHrspp3uwAAAABJRU5ErkJggg==';
var icon_add_file = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAABytJREFUeJzt2dFJnFEURtEzIW2IZYjBMgxMF+kkbeQlbUjsQ/swJcwf0BycvRbc94/7cNlwZwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAALhOp+0BwCG3M3O/PeKgp5l52R4BANfgPDNvn+Q8ftAdAO/oy/YAAOD/EwAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBX7cHcNjtzNxvj2DNt+0B/+BhvC1lTzPzsj2Cy07bAzjsPDO/tkcAXPB9Zn5vj+AyXwAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAEHTaHsBhNzNztz2CNQ8z82N7xEE/Z+bP9gjWPM/M6/YIgGtxnpm3T3IeP+gOgHfkCwAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABA0Gl7AHDIzczcbY846HlmXrdHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADT9BQlxY9GaV4RoAAAAAElFTkSuQmCC';




    $( '#file-upload-area').append(
        '<form action="php/form_upload.php" method="post" enctype="multipart/form-data">'
		+	'<input type="file" name="file[]" id="file" multiple style="display:none"/>'
		+	'<div class="fileuploader fileuploader-theme-thumbnails">'
		+		'<ul id="file-root" class="fileuploader-items-list">'
		+			'<li class="fileuploader-thumbnails-input">'
		+				'<div id="add-file" class="fileuploader-thumbnails-input-inner" style="cursor: pointer;">'
        +                    '<div style="height: 14px;">'
        +                        '</div>'
        +                    '<div class="file-image">'
        +                        '<img class="file-image-collec" src="'+icon_add_file+'" style="  height: 72px; width: 72px; "/>'
        +                        '</div>'
        +                    ' <div style="height: 14px;">'
        +                        '<p class="file-name"> </p>'
        +                        '</div>'
        +                    '</div>'
        +                '</li>'
        +            '</ul>'
        +        '</div>'
        +           '<input style=" display: none;" type="text" id="file-id-count"/>'
        +           '<input style=" display: none;" type="text" id="file-id-array"/>'

        +  '</form>'
    );





    var j = $('.fileuploader-thumbnails-input').length; // count element add
    $("#file-id-count").val(j);

    var arr_file = [];

    
    

   
     


    $('#file').change(function() {
        if ( ! window.FileReader ) {
			return alert( 'FileReader API is not supported by your browser.' );
		}
		var $i = $( '#file' ), // Put file input ID here
			input = $i[0]; // Getting the element from jQuery


            //---------------get extention--------
            var file_name_string = input.files[0].name;
            var file_name_array = file_name_string.split(".");
            var file_extension = file_name_array[file_name_array.length - 1];
            // end
        if(file_extension == 'doc' | file_extension == 'docx'|file_extension == 'png' | file_extension == 'jpg'| file_extension == 'pdf'){
            

                if ( input.files && input.files[0] ) {
                file = input.files[0]; // The file
                fr = new FileReader(); // FileReader instance

                ji = $("#file-id-count").val();
                ji = Number(ji);
                ji = ji + 1;
                
                $("#file-id-count").val(ji);
                arr_file.push('data-upload-'+ji);                
                $('#file-id-array').val(arr_file);

                   // alert(arr_file.length);
                fr.onload = function () {
                    // Do stuff on onload, use fr.result for contents of file
                    var image_upload = '';
                    if(file_extension == 'pdf'){
                        image_upload = icon_pdf_file;
                    }else if(file_extension == 'doc' | file_extension == 'docx'){
                        image_upload = icon_doc_file;
                    }else{
                        image_upload = fr.result;
                    }
                
                    $( '.fileuploader-items-list').prepend(                    
                        '<li class="fileuploader-thumbnails-input " id="file-id-'+ji+'">'
                    +		'<div class="fileuploader-thumbnails-input-inner">'
                    +            '<div class="delete-id">'
                    +                '<img class="file-delete-icon" id="delf-'+ji+'" src="'+icon_delete_file+'" />'
                    +            '</div>'
                    +            '<div class="file-image">'
                    +                '<img class="file-image-collec" src="'+image_upload+'" style="  height: 72px; width: 72px; "/>'
                    +            '</div>'
                    +            '<div>'
                    +                '<p class="file-name">'+file.name.substr(0, 5)+'...'+file_extension+'</p>'
                    +            '</div>'
                    +            '<input id="data-upload-'+ji+'"  name="data-upload-'+ji+'" type="text" value="'+fr.result+'" style="display:none"/>'
                    +		'</div>'
                    +	'</li>'
                    
                    ) 
                };
                //fr.readAsText( file );
                fr.readAsDataURL( file );
                } else {
                    // Handle errors here
                    alert( "File not selected or browser incompatible." )
                }


        }else{
            alert('Do not support this file! please choose againt!');
        }
            
		
    })


    $('#add-file').click(function() {
        $( "#file" ).trigger( "click" );  
    })



   

    $('#file-root').on('click', '.file-delete-icon', function(event) {
        //remove tag file
        var id = event.target.id;
        id = id.split("-")[1]
        var rmid = '#file-id-' + id;
        $(rmid).remove();
        //remove id array
        var rmary = 'data-upload-' + id;
        var index = arr_file.indexOf(rmary);
        if (index !== -1) {
            arr_file.splice(index, 1);
        }
        $('#file-id-array').val(arr_file);

      });
      
   






});