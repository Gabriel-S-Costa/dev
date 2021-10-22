import { Connection, createConnection, getConnectionOptions } from "typeorm";

export default async (): Promise<Connection> => {
   const defaultOptions = await getConnectionOptions();

   return createConnection(
      // Sobreescreve o objeto de conexão
      Object.assign(defaultOptions, {
         database: process.env.NODE_ENV === 'test' ? "./src/database/database.test.sqlite" : defaultOptions.database
      })
   );
}